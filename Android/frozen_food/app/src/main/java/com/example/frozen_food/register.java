package com.example.frozen_food;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;

import android.app.ProgressDialog;
import android.content.Context;
import android.content.Intent;
import android.net.ConnectivityManager;
import android.net.NetworkInfo;
import android.os.Bundle;
import android.os.Handler;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;
import com.google.android.material.textfield.TextInputEditText;
import com.google.firebase.auth.AuthResult;
import com.google.firebase.auth.FirebaseAuth;

import org.json.JSONException;
import org.json.JSONObject;

import java.util.HashMap;
import java.util.Map;

public class register extends AppCompatActivity {

//    FirebaseAuth mAuth;
    TextInputEditText inputUsername, inputEmail, pass, pass2,  inputAlamat, inputTelefon;
    Button btnDaftar;
    TextView log;
    ProgressDialog progressDialog;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);

        log = (TextView)findViewById(R.id.tv_login);
        log.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(register.this, login.class));
            }
        });

//        mAuth = FirebaseAuth.getInstance();
//        btnDaftar.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View v) {
//                registrasi();
//            }
//        });
        inputUsername = findViewById(R.id.register_nama);
        inputEmail = findViewById(R.id.register_email);
        pass = findViewById(R.id.register_pass1);
        pass2 = findViewById(R.id.register_pass2);
        inputAlamat = findViewById(R.id.register_alamat);
        inputTelefon = findViewById(R.id.register_telfon);
        btnDaftar = findViewById(R.id.btn_register);
        progressDialog = new ProgressDialog(register.this);

        btnDaftar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String sUsername = inputUsername.getText().toString();
                String sEmail = inputEmail.getText().toString();
                String sPass = pass.getText().toString();
                String sPass2 = pass2.getText().toString();
                String sAlamat = inputAlamat.getText().toString();
                String sTelefon = inputTelefon.getText().toString();

                if (sPass.equals(sPass2) && !sPass.equals("")){
                    CreateDataToServer(sUsername, sEmail, sPass,sAlamat,sTelefon);
                    Intent intent = new Intent(register.this,login.class);
                    startActivity(intent);
                }else {
                    Toast.makeText(register.this, "Gagal Password tidak cocok", Toast.LENGTH_SHORT).show();
                }
            }
        });

    }

    public void CreateDataToServer(final String username, final String email, final String password, final String alamat, final String telefon){
        if (checkNetworkConnection()){
           progressDialog.show();
            StringRequest stringRequest = new StringRequest(Request.Method.POST, DbContract.SERVER_REGISTER_URL,
                    new Response.Listener<String>() {
                        @Override
                        public void onResponse(String response) {
                            try {
                                JSONObject jsonObject = new JSONObject(response);
                                String resp = jsonObject.getString("server_response");
                                if (resp.equals("[{\"status\":\"OK\"}]")){
                                    Toast.makeText(register.this, "Registrasi Berhasil", Toast.LENGTH_SHORT).show();
                                }else {
                                   Toast.makeText(getApplicationContext(), resp, Toast.LENGTH_SHORT).show();
                                }
                            } catch (JSONException e) {
                                e.printStackTrace();
                            }
                        }
                    }, new Response.ErrorListener() {
                @Override
                public void onErrorResponse(VolleyError error) {

                }
            }){
                @Nullable
                @Override
                protected Map<String, String> getParams() throws AuthFailureError {
                    Map<String, String> params = new HashMap<>();
                    params.put("username", username);
                    params.put("email", email);
                    params.put("password", password);
                    params.put("alamat", alamat);
                    params.put("telefon", telefon);
                    return params;
                }
            };
            VolleyConnection.getInstance(register.this).addToRequestQue(stringRequest);
            new Handler().postDelayed(new Runnable() {
                @Override
                public void run() {
                    progressDialog.cancel();
                }
            }, 2000);
        } else {
            Toast.makeText(this, "Tidak ada koneksi internet", Toast.LENGTH_SHORT).show();
        }
    }

    public boolean checkNetworkConnection(){
        ConnectivityManager connectivityManager = (ConnectivityManager) this.getSystemService(Context.CONNECTIVITY_SERVICE);
        NetworkInfo networkInfo = connectivityManager.getActiveNetworkInfo();
        return (networkInfo != null && networkInfo.isConnected());
    }

//    private void registrasi() {
//        email = inputEmail.getText().toString();
//        password1 = pass1.getText().toString();
//
//
//        mAuth.createUserWithEmailAndPassword(email, password1)
//                .addOnCompleteListener(this, new OnCompleteListener<AuthResult>() {
//                    @Override
//                    public void onComplete(@NonNull Task<AuthResult> task) {
//                        if (task.isSuccessful()) {
//                            // Sign in success, update UI with the signed-in user's information
//                            Toast.makeText(register.this, "Registrasi Success", Toast.LENGTH_LONG).show();
//                        } else {
//                            // If sign in fails, display a message to the user.
//                            Toast.makeText(register.this, "Registrasi Gagal", Toast.LENGTH_LONG).show();
//                        }
//                    }
//                });
//    }


}
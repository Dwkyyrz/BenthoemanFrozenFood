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
import com.example.frozen_food.API.APIRequestData;
import com.example.frozen_food.API.RetroServer;
import com.example.frozen_food.Activity.product;
import com.example.frozen_food.Adapter.AdapterData;
import com.example.frozen_food.Model.DataModel;
import com.example.frozen_food.Model.DataUser;
import com.example.frozen_food.Model.ResponseModel;
import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;
import com.google.android.material.textfield.TextInputEditText;
import com.google.firebase.auth.AuthResult;
import com.google.firebase.auth.FirebaseAuth;

import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import retrofit2.Call;
import retrofit2.Callback;

public class login extends AppCompatActivity {
    TextView reg;
    TextInputEditText inputEmail, inputPassword;
    Button btnlogin;
    ProgressDialog progressDialog;
//    private FirebaseAuth mAuth;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        reg = (TextView)findViewById(R.id.tv_registrasi);
        reg.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(login.this, register.class));
            }
        });

//        mAuth = FirebaseAuth.getInstance();
//        btnlogin.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View v) {
//                cekLogin();
//            }
//        });
        inputEmail = findViewById(R.id.input_email);
        inputPassword = findViewById(R.id.input_password);
        btnlogin = findViewById(R.id.btn_login);
        progressDialog = new ProgressDialog(login.this);

        btnlogin.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String sEmail = inputEmail.getText().toString();
                String sPass = inputPassword.getText().toString();

                CheckLogin(sEmail, sPass);
            }
        });
    }


    public void CheckLogin(final String email, final String password){
        if (checkNetworkConnection()){
            progressDialog.show();
            StringRequest stringRequest = new StringRequest(Request.Method.POST, DbContract.SERVER_LOGIN_URL,
                    new Response.Listener<String>() {
                        @Override
                        public void onResponse(String response) {
                            try {
                                JSONObject jsonObject = new JSONObject(response);
                                String resp = jsonObject.getString("server_response");
                                if (resp.equals("[{\"status\":\"OK\"}]")){
                                    Toast.makeText(login.this, "Login Berhasil", Toast.LENGTH_SHORT).show();
                                    Intent homeIntent = new Intent(login.this,home.class);
                                    startActivity(homeIntent);
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
                    params.put("email", email);
                    params.put("password", password);
                    return params;
                }
            };
            VolleyConnection.getInstance(login.this).addToRequestQue(stringRequest);

            new Handler().postDelayed(new Runnable() {
                @Override
                public void run() {
                    progressDialog.cancel();
                }
            }, 2000);
        }else {
            Toast.makeText(this, "Tidak adaa koneksi internet", Toast.LENGTH_SHORT).show();
        }


    }

    public boolean checkNetworkConnection(){
        ConnectivityManager connectivityManager = (ConnectivityManager) this.getSystemService(Context.CONNECTIVITY_SERVICE);
        NetworkInfo networkInfo = connectivityManager.getActiveNetworkInfo();
        return (networkInfo != null && networkInfo.isConnected());
    }


//    private void cekLogin() {
//       email = inputEmail.getText().toString();
//       password = inputPassword.getText().toString();
//
//        mAuth.signInWithEmailAndPassword(email, password)
//                .addOnCompleteListener(this, new OnCompleteListener<AuthResult>() {
//                    @Override
//                    public void onComplete(@NonNull Task<AuthResult> task) {
//                        if (task.isSuccessful()) {
//                            // Sign in success, update UI with the signed-in user's information
//                            Toast.makeText(login.this, "Login Success", Toast.LENGTH_LONG).show();
//                            Intent intent = new Intent(login.this,home.class);
//                            startActivity(intent);
//                        } else {
//                            // If sign in fails, display a message to the user.
//                            Toast.makeText(login.this, "Login Gagal, Cek Email atau Password aanda", Toast.LENGTH_LONG).show();
//                        }
//                    }
//                });
//    }
//
//    public void home(View view) {
//        Intent intent = new Intent(login.this,home.class);
//        startActivity(intent);
//    }


}
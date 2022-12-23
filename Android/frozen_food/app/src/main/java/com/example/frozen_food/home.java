package com.example.frozen_food;

import androidx.appcompat.app.AppCompatActivity;

import android.app.ProgressDialog;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageButton;
import android.widget.TextView;

import com.android.volley.Request;
import com.android.volley.toolbox.StringRequest;
import com.example.frozen_food.Activity.product;

public class home extends AppCompatActivity {
    TextView namaUser, emailUser;
    ProgressDialog progressDialog;
    ImageButton cart, info;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);

        cart = findViewById(R.id.home_cart);
        namaUser = findViewById(R.id.nama_user);
        emailUser = findViewById(R.id.email_user);
        progressDialog = new ProgressDialog(home.this);
        info = findViewById(R.id.ib_deskripsi);

        info.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(home.this,deskripsi.class);
                startActivity(intent);
            }
        });

        cart.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(home.this,cart.class);
                startActivity(intent);
            }
        });
    }

    public void namaEmail (final String email, final String nama){

    }

    public void produk(View view) {
        Intent intent = new Intent(home.this, product.class);
        startActivity(intent);
    }

    public void deskripsi(View view) {
        Intent intent = new Intent(home.this,deskripsi.class);
        startActivity(intent);
    }

}
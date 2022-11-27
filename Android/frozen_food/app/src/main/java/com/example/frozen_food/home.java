package com.example.frozen_food;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;

public class home extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);
    }

    public void produk(View view) {
        Intent intent = new Intent(home.this,product.class);
        startActivity(intent);
    }

    public void deskripsi(View view) {
        Intent intent = new Intent(home.this,deskripsi.class);
        startActivity(intent);
    }

    public void cart(View view) {
        Intent intent = new Intent(home.this,cart.class);
        startActivity(intent);
    }
}
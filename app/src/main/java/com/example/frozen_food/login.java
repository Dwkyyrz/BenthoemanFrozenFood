package com.example.frozen_food;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;

public class login extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);
    }

    public void home(View view) {
        Intent intent = new Intent(login.this,home.class);
        startActivity(intent);
    }

    public void register(View view) {
        Intent intent = new Intent(login.this,register.class);
        startActivity(intent);
    }
}
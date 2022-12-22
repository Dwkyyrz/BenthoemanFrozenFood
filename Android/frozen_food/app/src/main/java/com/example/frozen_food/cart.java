package com.example.frozen_food;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.GridLayoutManager;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.os.Bundle;
import android.widget.Toast;

import com.example.frozen_food.API.APIRequestData;
import com.example.frozen_food.API.RetroServer;
import com.example.frozen_food.Activity.product;
import com.example.frozen_food.Adapter.AdapterData;
import com.example.frozen_food.Adapter.OrderAdapter;
import com.example.frozen_food.Model.DataModel;
import com.example.frozen_food.Model.ResponseModel;

import java.util.ArrayList;
import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class cart extends AppCompatActivity {

    private RecyclerView rvCart;
    private RecyclerView.Adapter adCart;
    private RecyclerView.LayoutManager lmCart;
    private List<DataModel> listData = new ArrayList<>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_cart);

        rvCart = findViewById(R.id.rv_cart);
        lmCart = new LinearLayoutManager(this,LinearLayoutManager.VERTICAL,false);
        rvCart.setLayoutManager(lmCart);
        retrieveCart();
    }

    private void retrieveCart() {
        APIRequestData ardData = RetroServer.konekRetrofit().create(APIRequestData.class);
        Call<ResponseModel> tampilData = ardData.ardRetrieveData();

        tampilData.enqueue(new Callback<ResponseModel>() {
            @Override
            public void onResponse(Call<ResponseModel> call, Response<ResponseModel> response) {
                int kode = response.body().getKode();
                String pesan = response.body().getPesan();

                Toast.makeText(cart.this, "Kode : "+kode+" | Pesan : "+pesan, Toast.LENGTH_SHORT).show();

                listData = response.body().getData();

                adCart = new OrderAdapter(cart.this, listData);
                rvCart.setAdapter(adCart);
                adCart.notifyDataSetChanged();
            }

            @Override
            public void onFailure(Call<ResponseModel> call, Throwable t) {
                Toast.makeText(cart.this, t.getMessage(), Toast.LENGTH_LONG).show();
            }
        });
    }
}
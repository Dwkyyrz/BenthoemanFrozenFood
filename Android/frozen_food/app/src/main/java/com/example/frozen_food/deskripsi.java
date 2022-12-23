package com.example.frozen_food;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;
import androidx.loader.app.LoaderManager;
import androidx.loader.content.CursorLoader;
import androidx.loader.content.Loader;

import android.content.ContentValues;
import android.content.Intent;
import android.database.Cursor;
import android.net.Uri;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

public class deskripsi extends AppCompatActivity implements LoaderManager.LoaderCallbacks<Cursor> {



    ImageView gambarDeskripsi;
    ImageButton plus,minus;
    TextView nama_produk, harga_produk, deskripsi,quantityNumber;
    Button tambahKeranjang;
    int quantity;
    public Uri mCurentCartUri;
    boolean hasAllRequiredValues = false;



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_deskripsi);

        gambarDeskripsi = findViewById(R.id.iv_deskripsi);
        quantityNumber = findViewById(R.id.tv_jumlah);
        plus = findViewById(R.id.ib_deskripsiPlus);
        minus = findViewById(R.id.ib_deskripsiMinus);
        nama_produk = findViewById(R.id.tv_deskripsiNama);
        harga_produk = findViewById(R.id.tv_deskripsiHarga);
        deskripsi = findViewById(R.id.tv_deskripsi);
        tambahKeranjang = findViewById(R.id.deskripsi_button);

        tambahKeranjang.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(deskripsi.this,cart.class);
                startActivity(intent);

                SaveCart();
            }
        });

        plus.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                int basePrice = 10000;
                quantity++;
                displayQuantity();
                int coffePrice = basePrice * quantity;
                String setNewPrice = String.valueOf(coffePrice);
                harga_produk.setText(setNewPrice);
            }
        });

        minus.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                int basePrice = 10000;
                if (quantity == 0){
                    Toast.makeText(deskripsi.this, "Cant decrase quantity", Toast.LENGTH_SHORT).show();
                }else{

                    quantity--;
                    displayQuantity();
                    int coffePrice = basePrice * quantity;
                    String setNewPrice = String.valueOf(coffePrice);
                    harga_produk.setText(setNewPrice);
                }
            }
        });

    }

    private boolean SaveCart() {

        String namaProduk = nama_produk.getText().toString();
        String hargaProduk = harga_produk.getText().toString();
        String jumlahProduk = quantityNumber.getText().toString();

        ContentValues values = new ContentValues();

//        values.put(OrderContract.OrderEntry.COLUMN_NAME, name);
//        values.put(OrderContract.OrderEntry.COLUMN_PRICE, price);
//        values.put(OrderContract.OrderEntry.COLUMN_QUANTITY, quantity);

        if (mCurentCartUri == null){
//            Uri newUri = getContentResolver().insert(OrderContract.OrderEntry.CONTENT_URI,values);
//            if (newUri == null){
//                Toast.makeText(this, "Failed to Add Cart", Toast.LENGTH_SHORT).show();
//            }else {
//                Toast.makeText(this, "Sucess to Add Cart", Toast.LENGTH_SHORT).show();
//            }
        }

        hasAllRequiredValues = true;
        return hasAllRequiredValues;
    }

    private void displayQuantity() {
        quantityNumber.setText(String.valueOf(quantity));
    }

    @NonNull
    @Override
    public Loader<Cursor> onCreateLoader(int id, @Nullable Bundle args) {
//        String[] projection = {OrderContract.OrderEntry._ID,
//                OrderContract.OrderEntry.COLUMN_NAME,
//                OrderContract.OrderEntry.COLUMN_PRICE,
//                OrderContract.OrderEntry.COLUMN_QUANTITY
//        };

//        return new CursorLoader(this, mCurentCartUri,
//            projection,
//                null,
//                null,
//                null
//        );
        return null;
    }

    @Override
    public void onLoadFinished(@NonNull Loader<Cursor> loader, Cursor cursor) {

        if (cursor == null || cursor.getCount() < 1){
            return;
        }
        if (cursor.moveToFirst()){

//            int nama = cursor.getColumnIndex(OrderContract.OrderEntry.COLUMN_NAME);
//            int harga = cursor.getColumnIndex(OrderContract.OrderEntry.COLUMN_PRICE);
//            int jumlah = cursor.getColumnIndex(OrderContract.OrderEntry.COLUMN_QUANTITY);

//            String namaProduk = cursor.getString(nama);
//            String hargaProduk = cursor.getString(harga);
//            String jumlahProduk = cursor.getString(jumlah);

//            nama_produk.setText(namaProduk);
//            harga_produk.setText(hargaProduk);
//            quantityNumber.setText(jumlahProduk);
        }

    }

    @Override
    public void onLoaderReset(@NonNull Loader<Cursor> loader) {

        nama_produk.setText("");
        harga_produk.setText("");
        quantityNumber.setText("");

    }
}
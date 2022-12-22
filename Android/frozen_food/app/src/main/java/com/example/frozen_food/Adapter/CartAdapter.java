package com.example.frozen_food.Adapter;

import android.content.Context;
import android.database.Cursor;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.CursorAdapter;
import android.widget.TextView;

import com.example.frozen_food.R;

public class CartAdapter extends CursorAdapter {

    public CartAdapter(Context context, Cursor cursor){
        super(context, cursor, 0);
    }

    @Override
    public View newView(Context context, Cursor cursor, ViewGroup parent) {
        return LayoutInflater.from(context).inflate(R.layout.cart_item, parent, false);
    }

    @Override
    public void bindView(View view, Context context, Cursor cursor) {

        TextView namaP, hargaP, jumlahP;

        namaP = view.findViewById(R.id.tv_cartNama);
        hargaP = view.findViewById(R.id.tv_cartHarga);
        jumlahP = view.findViewById(R.id.tv_cartJumlah);


//        int nama = cursor.getColumnIndex(OrderContract.OrderEntry.COLUMN_NAME);
//        int harga = cursor.getColumnIndex(OrderContract.OrderEntry.COLUMN_PRICE);
//        int jumlah = cursor.getColumnIndex(OrderContract.OrderEntry.COLUMN_QUANTITY);

//        String namaProduk = cursor.getString(nama);
//        String hargaProduk = cursor.getString(harga);
//        String jumlahProduk = cursor.getString(jumlah);
//
//        namaP.setText(namaProduk);
//        hargaP.setText(hargaProduk);
//        jumlahP.setText(jumlahProduk);

    }
}

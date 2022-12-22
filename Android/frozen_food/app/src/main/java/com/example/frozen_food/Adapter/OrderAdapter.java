package com.example.frozen_food.Adapter;

import android.content.Context;
import android.database.Cursor;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.CursorAdapter;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.bumptech.glide.Glide;
import com.bumptech.glide.request.RequestOptions;
import com.example.frozen_food.Config;
import com.example.frozen_food.Model.DataModel;
import com.example.frozen_food.R;

import java.util.List;

public class OrderAdapter extends RecyclerView.Adapter<OrderAdapter.HolderData> {


    private Context ctx;
    private List<DataModel> listData;

    public OrderAdapter(Context ctx, List<DataModel> listData) {
        this.ctx = ctx;
        this.listData = listData;
    }

    @NonNull
    @Override
    public HolderData onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        View layout = LayoutInflater.from(parent.getContext()).inflate(R.layout.cart_item, parent, false);
        HolderData holder = new HolderData(layout);
        return holder;
    }

    @Override
    public void onBindViewHolder(@NonNull HolderData holder, int position) {
        DataModel de = listData.get(position);

        holder.cartId.setText(String.valueOf(de.getId()));
        holder.cartNama.setText(de.getNama_produk());
        holder.cartHarga.setText(de.getHarga());
        Glide.with(holder.itemView.getContext())
                .load(Config.IMAGE_URL + de.getGambar())
                .apply(new RequestOptions().override(250, 500))
                .into(holder.ivcart);
    }

    @Override
    public int getItemCount() {
        return listData.size();
    }

    public class HolderData extends RecyclerView.ViewHolder{
        TextView cartId, cartNama, cartHarga;
        ImageView ivcart;

        public HolderData(@NonNull View itemView) {
            super(itemView);
            cartId = itemView.findViewById(R.id.tv_idcart);
            cartNama = itemView.findViewById(R.id.tv_cartNama);
            cartHarga = itemView.findViewById(R.id.tv_cartHarga);
            ivcart = itemView.findViewById(R.id.iv_cart);
        }
    }
}

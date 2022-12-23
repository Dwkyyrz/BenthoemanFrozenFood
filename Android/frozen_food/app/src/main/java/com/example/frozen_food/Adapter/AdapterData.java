package com.example.frozen_food.Adapter;

import android.content.Context;
import android.content.Intent;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;


import com.bumptech.glide.Glide;
import com.bumptech.glide.request.RequestOptions;
import com.example.frozen_food.Config;
import com.example.frozen_food.Model.DataModel;
import com.example.frozen_food.R;
import com.example.frozen_food.deskripsi;

import java.util.List;

public class AdapterData extends RecyclerView.Adapter<AdapterData.HolderData>{
    
    private Context ctx;
    private List<DataModel> listData;

    public AdapterData(Context ctx, List<DataModel> listData) {
        this.ctx = ctx;
        this.listData = listData;
    }

    @NonNull
    @Override
    public HolderData onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        View layout = LayoutInflater.from(parent.getContext()).inflate(R.layout.card_item, parent, false);
        HolderData holder = new HolderData(layout);
        return holder;
    }

    @Override
    public void onBindViewHolder(@NonNull HolderData holder, int position) {
        DataModel de = listData.get(position);

        holder.tvId.setText(String.valueOf(de.getId()));
        holder.tvNamaProduk.setText(de.getNama_produk());
        holder.tvHarga.setText(de.getHarga());
        holder.tvRating.setText(de.getRating());
        Glide.with(holder.itemView.getContext())
                .load(Config.IMAGE_URL + de.getGambar())
                .apply(new RequestOptions().override(250, 500))
                .into(holder.ivPicture);
    }

    @Override
    public int getItemCount() {
        return listData.size();
    }

    public class HolderData extends RecyclerView.ViewHolder implements View.OnClickListener{
        TextView tvId,tvNamaProduk, tvHarga, tvRating;
        ImageView ivPicture;


        public HolderData(@NonNull View itemView) {
            super(itemView);
            
            tvId = itemView.findViewById(R.id.tv_id);
            tvNamaProduk = itemView.findViewById(R.id.tv_namaProduk);
            tvHarga = itemView.findViewById(R.id.tv_harga);
            tvRating = itemView.findViewById(R.id.tv_rating);
            ivPicture = itemView.findViewById(R.id.Iv_picture);
            itemView.setOnClickListener(this);
            
        }

        @Override
        public void onClick(View v) {

            int position = getAdapterPosition();
            Intent intent = new Intent(ctx, deskripsi.class);
            ctx.startActivities(new Intent[]{intent});
//
//            if (position == 0){
//
//            }else if (position == 1){
//                Intent intent = new Intent(ctx, deskripsi.class);
//                ctx.startActivities(new Intent[]{intent});
//            }else if( position == 2){
//                Intent intent = new Intent(ctx, deskripsi.class);
//                ctx.startActivities(new Intent[]{intent});
//            }
        }
    }
}

package com.example.frozen_food.Model;

public class DataModel {
    private int id;
    private String nama_produk, harga,gambar, rating;

    public DataModel(int id, String nama_produk, String harga, String gambar, String rating) {
        this.id = id;
        this.nama_produk = nama_produk;
        this.harga = harga;
        this.gambar = gambar;
        this.rating = rating;
    }

    public String getGambar() {
        return gambar;
    }

    public void setGambar(String gambar) {
        this.gambar = gambar;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNama_produk() {
        return nama_produk;
    }

    public void setNama_produk(String nama_produk) {
        this.nama_produk = nama_produk;
    }

    public String getHarga() {
        return harga;
    }

    public void setHarga(String harga) {
        this.harga = harga;
    }

    public String getRating() {
        return rating;
    }

    public void setRating(String rating) {
        this.rating = rating;
    }
}

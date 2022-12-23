package com.example.frozen_food.API;

import com.example.frozen_food.Model.ResponseModel;

import retrofit2.Call;
import retrofit2.http.GET;

public interface APIRequestData {

    @GET("retrieve.php")
    Call<ResponseModel> ardRetrieveData();

    @GET("logindata.php")
    Call<ResponseModel> ardLoginData();
}

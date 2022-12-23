package com.example.frozen_food;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;
import androidx.loader.app.LoaderManager;
import androidx.loader.content.CursorLoader;
import androidx.loader.content.Loader;

import android.database.Cursor;
import android.os.Bundle;
import android.widget.ListView;

import com.example.frozen_food.Adapter.CartAdapter;

public class cartV2 extends AppCompatActivity implements LoaderManager.LoaderCallbacks<Cursor> {

    public CartAdapter mAdapter;
    public static final int LOADER = 0;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_cart_v2);

//        getLoaderManager().initLoader(LOADER, null, this);
//
//        ListView listView = findViewById(R.id.lv_list);
//        mAdapter = new CartAdapter(this, null);
//        listView.setAdapter(mAdapter);
    }

    @NonNull
    @Override
    public Loader<Cursor> onCreateLoader(int id, @Nullable Bundle args) {

//        String[] projection = {OrderContract.OrderEntry._ID,
//                OrderContract.OrderEntry.COLUMN_NAME,
//                OrderContract.OrderEntry.COLUMN_PRICE,
//                OrderContract.OrderEntry.COLUMN_QUANTITY
//        };
//
//        return new CursorLoader(this, OrderContract.OrderEntry.CONTENT_URI,
//            projection,
//                null,
//                null,
//                null
//        );
        return null;
    }

    @Override
    public void onLoadFinished(@NonNull Loader<Cursor> loader, Cursor data) {
        mAdapter.swapCursor(data);
    }

    @Override
    public void onLoaderReset(@NonNull Loader<Cursor> loader) {
        mAdapter.swapCursor(null);
    }
}
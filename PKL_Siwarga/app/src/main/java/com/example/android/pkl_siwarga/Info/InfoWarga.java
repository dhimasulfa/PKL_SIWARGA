package com.example.android.pkl_siwarga.Info;

import android.app.ProgressDialog;
import android.support.v4.view.MenuItemCompat;
import android.support.v4.widget.SwipeRefreshLayout;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.SearchView;
import android.util.Log;
import android.view.MenuItem;
import android.widget.ListView;
import android.widget.Toast;

import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.VolleyLog;
import com.android.volley.toolbox.JsonArrayRequest;
import com.android.volley.toolbox.StringRequest;
import com.example.android.pkl_siwarga.Info.InfoWarga;
import com.example.android.pkl_siwarga.Info.adapter.Adapter;
import com.example.android.pkl_siwarga.Info.model.DataModel;
import com.example.android.pkl_siwarga.R;
import com.example.android.pkl_siwarga.app.AppController;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class InfoWarga extends AppCompatActivity implements SwipeRefreshLayout.OnRefreshListener{

    ProgressDialog pDialog;
    List<DataModel> listData = new ArrayList<DataModel>();
    Adapter adapter;
    SwipeRefreshLayout swipe;
    ListView list_view;

    /* 10.0.2.2 adalah IP Address localhost EMULATOR ANDROID STUDIO,
    Ganti IP Address tersebut dengan IP Laptop Apabila di RUN di HP. HP dan Laptop harus 1 jaringan */
    public static final String url_data = "http://192.168.1.15/siwarga/datainfo.php";


    private static final String TAG = InfoWarga.class.getSimpleName();

    public static final String TAG_ID = "id";
    public static final String TAG_JUDUL = "judul";
    public static final String TAG_TANGGAL = "tanggal";
    public static final String TAG_ISI = "isi";
    public static final String TAG_RESULTS = "results";
    public static final String TAG_MESSAGE = "message";
    public static final String TAG_VALUE = "value";

    String tag_json_obj = "json_obj_req";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_info_warga);

        swipe = (SwipeRefreshLayout) findViewById(R.id.swipe_refresh_info);
        list_view = (ListView) findViewById(R.id.list_view_info);

        adapter = new Adapter(InfoWarga.this, listData);
        list_view.setAdapter(adapter);

        swipe.setOnRefreshListener(this);

        swipe.post(new Runnable() {
                       @Override
                       public void run() {
                           swipe.setRefreshing(true);
                           callData();
                       }
                   }
        );

    }

    private void callData() {
        listData.clear();
        adapter.notifyDataSetChanged();
        swipe.setRefreshing(true);

        // Creating volley request obj
        JsonArrayRequest jArr = new JsonArrayRequest(url_data, new Response.Listener<JSONArray>() {

            @Override
            public void onResponse(JSONArray response) {
                Log.e(TAG, response.toString());

                // Parsing json
                for (int i = 0; i < response.length(); i++) {
                    try {
                        JSONObject obj = response.getJSONObject(i);

                        DataModel item = new DataModel();

                        item.setId(obj.getString(TAG_ID));
                        item.setJudul(obj.getString(TAG_JUDUL));
                        item.setTanggal(obj.getString(TAG_TANGGAL));
                        item.setIsi(obj.getString(TAG_ISI));

                        listData.add(item);
                    } catch (JSONException e) {
                        e.printStackTrace();
                    }
                }

                // notifying list adapter about data changes
                // so that it renders the list view with updated data
                adapter.notifyDataSetChanged();
                swipe.setRefreshing(false);
            }
        }, new Response.ErrorListener() {

            @Override
            public void onErrorResponse(VolleyError error) {
                VolleyLog.e(TAG, "Error: " + error.getMessage());
                Toast.makeText(InfoWarga.this, error.getMessage(), Toast.LENGTH_LONG).show();
                swipe.setRefreshing(false);
            }
        });

        // Adding request to request queue
        AppController.getInstance().addToRequestQueue(jArr);
    }

    @Override
    public void onRefresh() {
        callData();
    }



}

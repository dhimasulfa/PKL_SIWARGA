package com.example.android.pkl_siwarga.Keanggotaan;

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
import com.example.android.pkl_siwarga.R;
import com.example.android.pkl_siwarga.Keanggotaan.adapter.Adapter;
import com.example.android.pkl_siwarga.app.AppController;
import com.example.android.pkl_siwarga.Keanggotaan.model.DataModel;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class Keanggotaan extends AppCompatActivity implements SearchView.OnQueryTextListener {

    ProgressDialog pDialog;
    List<DataModel> listData = new ArrayList<DataModel>();
    Adapter adapter;
    SwipeRefreshLayout swipe;
    ListView list_view;

    /* 10.0.2.2 adalah IP Address localhost EMULATOR ANDROID STUDIO,
    Ganti IP Address tersebut dengan IP Laptop Apabila di RUN di HP. HP dan Laptop harus 1 jaringan */
    //public static final String url_data = "http://192.168.1.14/siwarga/data.php";
    public static final String url_cari = "http://192.168.1.15/siwarga/caridata.php";


    private static final String TAG = Keanggotaan.class.getSimpleName();

    public static final String TAG_ID = "nik";
    public static final String TAG_NAMA = "nama";
    public static final String TAG_RESULTS = "results";
    public static final String TAG_MESSAGE = "message";
    public static final String TAG_VALUE = "value";

    String tag_json_obj = "json_obj_req";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.keanggotaan);

        swipe = (SwipeRefreshLayout) findViewById(R.id.swipe_refresh);
        list_view = (ListView) findViewById(R.id.list_view);

        adapter = new Adapter(Keanggotaan.this, listData);
        list_view.setAdapter(adapter);

//        swipe.setOnRefreshListener(this);
//
//        swipe.post(new Runnable() {
//                       @Override
//                       public void run() {
//                           swipe.setRefreshing(true);
//                           callData();
//                       }
//                   }
//        );

    }

//    private void callData() {
//        listData.clear();
//        adapter.notifyDataSetChanged();
//        swipe.setRefreshing(true);
//
//        // Creating volley request obj
//        JsonArrayRequest jArr = new JsonArrayRequest(url_data, new Response.Listener<JSONArray>() {
//
//            @Override
//            public void onResponse(JSONArray response) {
//                Log.e(TAG, response.toString());
//
//                // Parsing json
//                for (int i = 0; i < response.length(); i++) {
//                    try {
//                        JSONObject obj = response.getJSONObject(i);
//
//                        DataModel item = new DataModel();
//
//                        item.setNik(obj.getString(TAG_ID));
//                        item.setNama(obj.getString(TAG_NAMA));
//
//                        listData.add(item);
//                    } catch (JSONException e) {
//                        e.printStackTrace();
//                    }
//                }
//
//                // notifying list adapter about data changes
//                // so that it renders the list view with updated data
//                adapter.notifyDataSetChanged();
//                swipe.setRefreshing(false);
//            }
//        }, new Response.ErrorListener() {
//
//            @Override
//            public void onErrorResponse(VolleyError error) {
//                VolleyLog.e(TAG, "Error: " + error.getMessage());
//                Toast.makeText(Keanggotaan.this, error.getMessage(), Toast.LENGTH_LONG).show();
//                swipe.setRefreshing(false);
//            }
//        });
//
//        // Adding request to request queue
//        AppController.getInstance().addToRequestQueue(jArr);
//    }
//
//    @Override
//    public void onRefresh() {
//        callData();
//    }

    @Override
    public boolean onQueryTextSubmit(String query) {
        cariData(query);
        return false;
    }

    @Override
    public boolean onQueryTextChange(String newText) {
        return false;
    }

    @Override
    public boolean onCreateOptionsMenu(android.view.Menu menu) {
        getMenuInflater().inflate(R.menu.main_menu, menu);
        final MenuItem item = menu.findItem(R.id.action_search);
        final SearchView searchView = (SearchView) MenuItemCompat.getActionView(item);
        searchView.setQueryHint(getString(R.string.type_name));
        searchView.setIconified(true);
        searchView.setOnQueryTextListener(this);
        return true;
    }

    private void cariData(final String keyword) {
        pDialog = new ProgressDialog(Keanggotaan.this);
        pDialog.setCancelable(false);
        pDialog.setMessage("Loading...");
        pDialog.show();

        StringRequest strReq = new StringRequest(Request.Method.POST, url_cari, new Response.Listener<String>() {

            @Override
            public void onResponse(String response) {
                Log.e("Response: ", response.toString());

                try {
                    JSONObject jObj = new JSONObject(response);

                    int value = jObj.getInt(TAG_VALUE);

                    if (value == 1) {
                        listData.clear();
                        adapter.notifyDataSetChanged();

                        String getObject = jObj.getString(TAG_RESULTS);
                        JSONArray jsonArray = new JSONArray(getObject);

                        for (int i = 0; i < jsonArray.length(); i++) {
                            JSONObject obj = jsonArray.getJSONObject(i);

                            DataModel data = new DataModel();

                            data.setNik(obj.getString(TAG_ID));
                            data.setNama(obj.getString(TAG_NAMA));

                            listData.add(data);
                        }

                    } else {
                        Toast.makeText(getApplicationContext(), jObj.getString(TAG_MESSAGE), Toast.LENGTH_SHORT).show();
                    }

                } catch (JSONException e) {
                    // JSON error
                    e.printStackTrace();
                }

                adapter.notifyDataSetChanged();
                pDialog.dismiss();
            }
        }, new Response.ErrorListener() {

            @Override
            public void onErrorResponse(VolleyError error) {
                VolleyLog.e(TAG, "Error: " + error.getMessage());
                Toast.makeText(getApplicationContext(), error.getMessage(), Toast.LENGTH_SHORT).show();
                pDialog.dismiss();
            }
        }) {

            @Override
            protected Map<String, String> getParams() {
                // Posting parameters to login url
                Map<String, String> params = new HashMap<String, String>();
                params.put("keyword", keyword);

                return params;
            }

        };

        AppController.getInstance().addToRequestQueue(strReq, tag_json_obj);
    }
}

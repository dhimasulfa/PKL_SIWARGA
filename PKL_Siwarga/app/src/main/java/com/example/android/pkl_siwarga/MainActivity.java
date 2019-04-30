package com.example.android.pkl_siwarga;

import android.content.Intent;
import android.os.AsyncTask;
import android.support.annotation.NonNull;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.Toast;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;
import com.google.android.gms.tasks.OnCompleteListener;
import com.example.android.pkl_siwarga.Info.InfoWarga;
import com.example.android.pkl_siwarga.Keanggotaan.Keanggotaan;
import com.example.android.pkl_siwarga.Rt.RT;
import com.example.android.pkl_siwarga.Rw.RW;
import com.google.android.gms.tasks.Task;
import com.google.firebase.iid.FirebaseInstanceId;
import com.google.firebase.messaging.FirebaseMessaging;

import org.json.JSONObject;

import java.io.OutputStreamWriter;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.HashMap;
import java.util.Map;

public class MainActivity extends AppCompatActivity {

    ImageButton emergency;
    String tkn;

//    String SERVER_ADDRESS = "http://192.168.1.15/siwarga/notification.php?token=\"";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //Button Emergency
        tkn= FirebaseInstanceId.getInstance().getToken();
        emergency=findViewById(R.id.emergency);

//        emergency.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View v) {
//
//                // [START subscribe_topics]
//                FirebaseMessaging.getInstance().subscribeToTopic("weather")
//                        .addOnCompleteListener(new OnCompleteListener<Void>() {
//                            @Override
//                            public void onComplete(@NonNull Task<Void> task) {
//                                String msg = "sukses";
//                                if (!task.isSuccessful()) {
//                                    msg = "gagal";
//                                }
//
//                                Toast.makeText(MainActivity.this, msg, Toast.LENGTH_SHORT).show();
//                            }
//                        });
//                // [END subscribe_topics]
//            }
//        });

        emergency.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
//                String topic = "Emergency";
//
//                // See documentation on defining a message payload.
//                Message message = Message.builder()
//                        .putData("score", "850")
//                        .putData("time", "2:45")
//                        .setTopic(topic)
//                        .build();
//
//                // Send a message to the devices subscribed to the provided topic.
//                String response = FirebaseMessaging.getInstance().send(message);
//                // Response is a message ID string.
//                System.out.println("Successfully sent message: " + response);
                new Emergency();
            }

        });

        //Button Menu
        ImageButton anggota=(ImageButton) findViewById(R.id.anggota);

        anggota.setOnClickListener(new View.OnClickListener() {
            public void onClick(View arg0) {

                Intent i = new Intent(getApplicationContext(), Keanggotaan.class);

                startActivity(i);
            }
        });

        ImageButton rt=(ImageButton) findViewById(R.id.rt);

        rt.setOnClickListener(new View.OnClickListener() {
            public void onClick(View arg0) {

                Intent i = new Intent(getApplicationContext(), RT.class);

                startActivity(i);
            }
        });

        ImageButton rw=(ImageButton) findViewById(R.id.rw);

        rw.setOnClickListener(new View.OnClickListener() {
            public void onClick(View arg0) {

                Intent i = new Intent(getApplicationContext(), RW.class);

                startActivity(i);
            }
        });

        ImageButton info=(ImageButton) findViewById(R.id.info);

        info.setOnClickListener(new View.OnClickListener() {
            public void onClick(View arg0) {

                Intent i = new Intent(getApplicationContext(), InfoWarga.class);

                startActivity(i);
            }
        });
    }

    //button emergency
    public class Emergency extends AsyncTask<Void,Void,Void> {

        @Override
        protected Void doInBackground(Void... voids) {
            try {

                URL url = new URL("https://fcm.googleapis.com/fcm/send");
                HttpURLConnection conn = (HttpURLConnection) url.openConnection();

                conn.setUseCaches(false);
                conn.setDoInput(true);
                conn.setDoOutput(true);

                conn.setRequestMethod("POST");
                conn.setRequestProperty("Authorization", "key=AIzaSyCRWNO174jotb37S3_fAr1ANJqrFRGtS04");
                conn.setRequestProperty("Content-Type", "application/json");

                JSONObject json = new JSONObject();

                json.put("to", "/topic/Emergency");


                JSONObject info = new JSONObject();
                info.put("title", "Emergency");   // Notification title
                info.put("body", "Tolong Saya Sedang Mengalami Keadaan Darurat"); // Notification body

                json.put("notification", info);

                OutputStreamWriter wr = new OutputStreamWriter(conn.getOutputStream());
                wr.write(json.toString());
                wr.flush();
                conn.getInputStream();

            }
            catch (Exception e)
            {
                Log.d("Error",""+e);
            }


            return null;
        }

        @Override
        protected void onPostExecute(Void aVoid) {
            super.onPostExecute(aVoid);
        }
    }

//    public void sendNotificationToappServer(final String token,final String title, final String notification){
//        StringRequest stringRequest = new StringRequest(Request.Method.POST,SERVER_ADDRESS+token,
//                new Response.Listener<String>() {
//                    @Override
//                    public void onResponse(String response) {
//                       /* Toast.makeText(MainActivity.this,response,Toast.LENGTH_LONG).show();*/
//                    }
//                },
//                new Response.ErrorListener() {
//                    @Override
//                    public void onErrorResponse(VolleyError error) {
//                        Toast.makeText(MainActivity.this,error.toString(),Toast.LENGTH_LONG).show();
//                    }
//                }){
//            @Override
//            protected Map<String,String> getParams(){
//                Map<String,String> params = new HashMap<String, String>();
//                params.put("title",title);
//                params.put("message",notification);
//                return params;
//            }
//        };
//        RequestQueue requestQueue = Volley.newRequestQueue(this);
//        requestQueue.add(stringRequest);
//    }
}

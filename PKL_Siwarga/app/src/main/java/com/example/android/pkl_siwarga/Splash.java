package com.example.android.pkl_siwarga;

import android.content.Intent;
import android.os.Bundle;
import android.os.Handler;
import android.support.annotation.NonNull;
import android.support.v7.app.AppCompatActivity;
import android.util.Log;
import android.widget.Toast;

import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;
import com.google.firebase.iid.FirebaseInstanceId;
import com.google.firebase.messaging.FirebaseMessaging;

public class Splash extends AppCompatActivity {
    private int waktu_load=3000;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.splash);

        FirebaseMessaging.getInstance().subscribeToTopic("Emergency")
                .addOnCompleteListener(new OnCompleteListener<Void>() {
                    @Override
                    public void onComplete(@NonNull Task<Void> task) {
                        String msg = "sukses";
                        if (!task.isSuccessful()) {
                            msg = "gagal";
                        }
                        Toast.makeText(Splash.this, msg, Toast.LENGTH_SHORT).show();
                    }
                });

        new Handler().postDelayed(new Runnable() {
            @Override
            public void run() {
                Intent login=new Intent(Splash.this, MainActivity.class);
                startActivity(login);
                finish();
            }
        },waktu_load);
    }
}

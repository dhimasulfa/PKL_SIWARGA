package com.example.android.pkl_siwarga.Info.adapter;

import android.app.Activity;
import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.TextView;

import com.example.android.pkl_siwarga.Info.model.DataModel;
import com.example.android.pkl_siwarga.R;

import java.util.List;

/**
 * Created by LutfaA on 01/04/2019.
 */

public class Adapter extends BaseAdapter {
    private Activity activity;
    private LayoutInflater inflater;
    private List<DataModel> item;

    public Adapter(Activity activity, List<DataModel> item) {
        this.activity = activity;
        this.item = item;
    }

    @Override
    public int getCount() {
        return item.size();
    }

    @Override
    public Object getItem(int location) {
        return item.get(location);
    }

    @Override
    public long getItemId(int position) {
        return position;
    }

    @Override
    public View getView(int position, View convertView, ViewGroup parent) {

        if (inflater == null)
            inflater = (LayoutInflater) activity
                    .getSystemService(Context.LAYOUT_INFLATER_SERVICE);

        if (convertView == null)
            convertView = inflater.inflate(R.layout.list_item_info, null);

        TextView txt_judul = (TextView) convertView.findViewById(R.id.txt_judul);

        txt_judul.setText(item.get(position).getJudul());

        TextView txt_tanggal = (TextView) convertView.findViewById(R.id.txt_tanggal);

        txt_tanggal.setText(item.get(position).getTanggal());

        TextView txt_berita = (TextView) convertView.findViewById(R.id.txt_berita);

        txt_berita.setText(item.get(position).getIsi());

        return convertView;
    }
}

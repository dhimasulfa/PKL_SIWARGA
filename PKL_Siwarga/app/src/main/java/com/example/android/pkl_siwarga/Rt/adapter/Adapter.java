package com.example.android.pkl_siwarga.Rt.adapter;

import android.app.Activity;
import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.TextView;

import com.example.android.pkl_siwarga.R;
import com.example.android.pkl_siwarga.Rt.model.DataModel;

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
            convertView = inflater.inflate(R.layout.list_item_rt, null);

        TextView txt_rt = (TextView) convertView.findViewById(R.id.txt_rt);

        txt_rt.setText(item.get(position).getRt());

        TextView txt_rw = (TextView) convertView.findViewById(R.id.txt_rw);

        txt_rw.setText(item.get(position).getRw());

        TextView txt_nama_ketua = (TextView) convertView.findViewById(R.id.txt_nama_ketua);

        txt_nama_ketua.setText(item.get(position).getNama_ketua());

        return convertView;
    }
}

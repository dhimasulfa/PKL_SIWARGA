package com.example.android.pkl_siwarga.Rt.model;

/**
 * Created by LutfaA on 01/04/2019.
 */

public class DataModel {
    private String id_rt, rt, rw, nama_ketua;

    public DataModel() {
    }

    public DataModel(String id_rt, String rt, String rw, String nama_ketua) {
        this.id_rt = id_rt;
        this.rt = rt;
        this.rw = rw;
        this.nama_ketua = nama_ketua;
    }

    public String getId_rt() {
        return id_rt;
    }

    public void setId_rt(String id_rt) {
        this.id_rt = id_rt;
    }

    public String getRt() {
        return rt;
    }

    public void setRt(String rt) {
        this.rt = rt;
    }

    public String getRw() {
        return rw;
    }

    public void setRw(String rw) {
        this.rw = rw;
    }

    public String getNama_ketua() {
        return nama_ketua;
    }

    public void setNama_ketua(String nama_ketua) {
        this.nama_ketua = nama_ketua;
    }
}
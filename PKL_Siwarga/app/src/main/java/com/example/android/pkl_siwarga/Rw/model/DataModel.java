package com.example.android.pkl_siwarga.Rw.model;

/**
 * Created by LutfaA on 01/04/2019.
 */

public class DataModel {
    private String id_rw, rw, nama_ketua;

    public DataModel() {
    }

    public DataModel(String id_rw, String rw, String nama_ketua) {
        this.id_rw = id_rw;
        this.rw = rw;
        this.nama_ketua = nama_ketua;
    }

    public String getId_rw() {
        return id_rw;
    }

    public void setId_rw(String id_rw) {
        this.id_rw = id_rw;
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
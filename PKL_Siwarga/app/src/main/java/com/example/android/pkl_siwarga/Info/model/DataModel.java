package com.example.android.pkl_siwarga.Info.model;

/**
 * Created by LutfaA on 01/04/2019.
 */

public class DataModel {
    private String id, judul, tanggal, isi;

    public DataModel() {
    }

    public DataModel(String id, String judul, String tanggal, String isi) {
        this.id = id;
        this.judul = judul;
        this.tanggal = tanggal;
        this.isi = isi;
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getJudul() {
        return judul;
    }

    public void setJudul(String judul) {
        this.judul = judul;
    }

    public String getTanggal() {
        return tanggal;
    }

    public void setTanggal(String tanggal) {
        this.tanggal = tanggal;
    }

    public String getIsi() {
        return isi;
    }

    public void setIsi(String isi) {
        this.isi = isi;
    }
}
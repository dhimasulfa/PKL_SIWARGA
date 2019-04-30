package com.example.android.pkl_siwarga.Keanggotaan.model;

/**
 * Created by LutfaA on 01/04/2019.
 */

public class DataModel {
    private String nik, nama;

    public DataModel() {
    }

    public DataModel(String nik, String nama) {
        this.nik = nik;
        this.nama = nama;
    }

    public String getNik() {
        return nik;
    }

    public void setNik(String nik) {
        this.nik = nik;
    }

    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }
}
package com.example.pachacaj.btle2025;

import okhttp3.OkHttpClient;
import okhttp3.logging.HttpLoggingInterceptor;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

public class LogicaFake {
    //Declaro mi ip
    private static final String urlLocal = "http://10.146.156.250/Proyecto-Aplicaciones-De-Biometr-a-Y-Medio-Ambiente/src/Api/postGuardarMediciones.php";

    //Pongo Retrofit en null para después comprobar si está o no funcional
    private static Retrofit retrofit = null;

    public static ApiService getApiService(){
        if (retrofit == null) {
            //interceptar metodo php
            HttpLoggingInterceptor interceptor = new HttpLoggingInterceptor();
            interceptor.setLevel(HttpLoggingInterceptor.Level.BODY);

            //
            OkHttpClient client = new OkHttpClient.Builder().addInterceptor(interceptor).build();

            //
            retrofit = new Retrofit.Builder()
                    .baseUrl(urlLocal)
                    .addConverterFactory(GsonConverterFactory.create())
                    .client(client)
                    .build();
        }
        return retrofit.create(ApiService.class);
    }
}

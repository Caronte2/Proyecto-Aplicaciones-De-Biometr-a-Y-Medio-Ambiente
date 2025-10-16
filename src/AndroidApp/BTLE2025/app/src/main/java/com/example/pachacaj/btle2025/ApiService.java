package com.example.pachacaj.btle2025;

import retrofit2.Call;
import retrofit2.http.Field;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.POST;

//Interfaz de los datos que se van a evniar
public interface ApiService {
    @FormUrlEncoded
    @POST ("postGuardarMediciones.php")
    Call<Void> enviarDatos(
            @Field("CO2") float co2,
            @Field("Temperatura") float temperatura
    );
}

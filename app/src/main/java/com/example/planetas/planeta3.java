package com.example.planetas;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class planeta3 extends AppCompatActivity {

    Button btnVltVenus, btnAvMarte;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.planeta3);


        //Voltar
        btnVltVenus= findViewById(R.id.btnVltVenus);
        btnVltVenus.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaVenus = new Intent( getApplicationContext() ,planeta3.class);
                startActivity(telaVenus);
            }
        });

        //Avançar
        btnAvMarte= findViewById(R.id.btnAvMarte);
        btnAvMarte.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaMarte= new Intent( getApplicationContext() , planeta4.class);
                startActivity(telaMarte);
            }
        });

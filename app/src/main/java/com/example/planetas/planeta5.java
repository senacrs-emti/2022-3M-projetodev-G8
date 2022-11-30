package com.example.planetas;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class planeta5 extends AppCompatActivity {

    Button btnVltMarte, btnAvSat;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.planeta5);

        //Voltar
        btnVltMarte = findViewById(R.id.btnVltMarte);
        btnVltMarte.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaMarte = new Intent(getApplicationContext(), planeta4.class);
                startActivity(telaMarte);
            }
        });
    }
        //Avancar

        btnAvSat= findViewById(R.id.btnAvSat);
        btnAvSat.setOnClickListener(new View.OnClickListener() {
            @Override

            public void onClick(View view) {

            //navegacao de tela

            Intent telaSat = new Intent( getApplicationContext() , planeta6.class);
            startActivity(telaSat);
            }
        });



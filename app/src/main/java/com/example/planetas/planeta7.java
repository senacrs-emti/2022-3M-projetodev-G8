package com.example.planetas;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class planeta7 extends AppCompatActivity {

    Button btnVltSat,btnAvNet;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.planeta7);

        //Voltar
        btnVltSat = findViewById(R.id.btnVltSat);
        btnVltSat.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaSat = new Intent(getApplicationContext(), planeta6.class);
                startActivity(telaSat);
            }
        });

        //Avançar

        btnAvNet = findViewById(R.id.btnAvNet);
        btnAvNet.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaNet = new Intent(getApplicationContext(), planeta8.class);
                startActivity(telaNet);
            }
        });
    }
}
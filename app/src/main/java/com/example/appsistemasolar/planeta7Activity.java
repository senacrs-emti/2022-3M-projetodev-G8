package com.example.appsistemasolar;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class planeta7Activity extends AppCompatActivity {

    Button btnVltSat,btnAvNet;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_planeta7);

        //Voltar
        btnVltSat = findViewById(R.id.btnVltSat);
        btnVltSat.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaSat = new Intent(getApplicationContext(), planeta6Activity.class);
                startActivity(telaSat);
            }
        });

        //Avançar

        btnAvNet = findViewById(R.id.btnAvNet);
        btnAvNet.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaNet = new Intent(getApplicationContext(), planeta8Activity.class);
                startActivity(telaNet);
            }
        });
    }
}
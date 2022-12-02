package com.example.appsistemasolar;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class planeta6Activity extends AppCompatActivity {

    Button btnVltJup, btnAvUrano;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_planeta6);


        //Voltar
        btnVltJup = findViewById(R.id.btnVltJup);
        btnVltJup.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaJup = new Intent(getApplicationContext(), planeta5Activity.class);
                startActivity(telaJup);
            }
        });

        //Avançar

        btnAvUrano = findViewById(R.id.btnAvUrano);
        btnAvUrano.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaUrano = new Intent(getApplicationContext(), planeta7Activity.class);
                startActivity(telaUrano);
            }
        });
    }
}
package com.example.planetas;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class planeta6 extends AppCompatActivity {

    Button btnVltJup,btnAvUrano;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.planeta6);


        //Voltar
        btnVltJup = findViewById(R.id.btnVltJup);
        btnVltJup.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaJup = new Intent(getApplicationContext(), planeta5.class);
                startActivity(telaJup);
            }
        });

        //Avançar

        btnAvUrano = findViewById(R.id.btnAvUrano);
        btnAvUrano.setOnClickListener(new View.OnClickListener() {

        @Override
        public void onClick(View view) {
            //navegacao de tela
            Intent telaUrano = new Intent(getApplicationContext(), planeta7.class);
            startActivity(telaUrano);
        }
    });
}
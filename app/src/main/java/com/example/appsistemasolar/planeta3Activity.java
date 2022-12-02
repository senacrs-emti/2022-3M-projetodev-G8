package com.example.appsistemasolar;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class planeta3Activity extends AppCompatActivity {

    Button btnVltVenus, btnAvMarte;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_planeta3);


        //Voltar
        btnVltVenus = findViewById(R.id.btnVltVenus);
        btnVltVenus.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaVenus = new Intent(getApplicationContext(), planeta2Activity.class);
                startActivity(telaVenus);
            }
        });

        //Avançar
        btnAvMarte = findViewById(R.id.btnAvMarte);
        btnAvMarte.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaMarte = new Intent(getApplicationContext(), planeta4Activity.class);
                startActivity(telaMarte);
            }
        });
    }
}
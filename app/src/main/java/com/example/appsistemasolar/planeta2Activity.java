package com.example.appsistemasolar;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class planeta2Activity extends AppCompatActivity {

    Button btnVltMerc, btnAvTerra;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_planeta2);

        //Voltar
        btnVltMerc = findViewById(R.id.btnVltMerc);
        btnVltMerc.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaMerc = new Intent(getApplicationContext(), MercActivity.class);
                startActivity(telaMerc);
            }
        });

        //Avançar
        btnAvTerra = findViewById(R.id.btnAvTerra);
        btnAvTerra.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaTerra = new Intent(getApplicationContext(), planeta3Activity.class);
                startActivity(telaTerra);
            }
        });
    }
}
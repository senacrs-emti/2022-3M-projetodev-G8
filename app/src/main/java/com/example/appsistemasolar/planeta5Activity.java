package com.example.appsistemasolar;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class planeta5Activity extends AppCompatActivity {

    Button btnVltMarte, btnAvSat;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_planeta5);


        //Voltar
        btnVltMarte = findViewById(R.id.btnVltMarte);
        btnVltMarte.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaMarte = new Intent(getApplicationContext(), planeta4Activity.class);
                startActivity(telaMarte);
            }
        });
        //Avancar
        btnAvSat = findViewById(R.id.btnAvSat);
        btnAvSat.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaSat= new Intent(getApplicationContext(), planeta6Activity.class);
                startActivity(telaSat);
            }
        });
    }
}
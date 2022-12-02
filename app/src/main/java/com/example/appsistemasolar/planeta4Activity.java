package com.example.appsistemasolar;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class planeta4Activity extends AppCompatActivity {

    Button btnVltTerra, btnAvJup;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_planeta4);

        //Voltar
        btnVltTerra = findViewById(R.id.btnVltTerra);
        btnVltTerra.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaTerra = new Intent(getApplicationContext(), planeta3Activity.class);
                startActivity(telaTerra);
            }
        });
        //Avancar
        btnAvJup = findViewById(R.id.btnAvJup);
        btnAvJup.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaJup = new Intent(getApplicationContext(), planeta5Activity.class);
                startActivity(telaJup);
            }
        });
    }
}
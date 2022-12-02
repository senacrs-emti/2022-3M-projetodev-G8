package com.example.appsistemasolar;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class planeta1Activity extends AppCompatActivity {
    //declaracao de objetos

    Button btnVltSol, btnAvVen;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_planeta1);
        //Voltar
        btnVltSol = findViewById(R.id.btnAvSol);
        btnVltSol.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaSol = new Intent(getApplicationContext(), EstrelaActivity.class);
                startActivity(telaSol);

            }
        });
        //Avançar
        btnAvVen = findViewById(R.id.btnAvVen);
        btnAvVen.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaVen = new Intent(getApplicationContext(), planeta2Activity.class);
                startActivity(telaVen);

            }
        });
    }
}
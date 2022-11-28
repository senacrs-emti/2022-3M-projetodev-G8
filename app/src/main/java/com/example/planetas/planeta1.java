package com.example.planetas;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class planeta1 extends AppCompatActivity {

    //declaracao de objetos

    Button btnVltSol, btnAvVenus;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.planeta1);

        //Voltar
        btnVltSol= findViewById(R.id.btnAvSol);
        btnVltSol.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaSol = new Intent( getApplicationContext() ,MainActivity.class);
                startActivity(telaSol);

    }
});
        //Avançar
        btnAvVenus= findViewById(R.id.btnAvVenus);
        btnAvVenus.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaVenus = new Intent( getApplicationContext() , planeta2.class);
                startActivity(telaVenus);

            }
        });


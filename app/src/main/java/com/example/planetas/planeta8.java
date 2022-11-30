package com.example.planetas;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class planeta8 extends AppCompatActivity {

    Button btnVltUrano, btnAvRef;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.planeta8);


        //Voltar

        btnVltUrano = findViewById(R.id.btnVltUrano);
        btnVltUrano.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaUrano = new Intent(getApplicationContext(), planeta7.class);
                startActivity(telaUrano);
            }
        });

        //Avançar

        btnAvRef = findViewById(R.id.btnAvRef);
        btnAvRef.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaRef= new Intent(getApplicationContext(), refActivity.class);
                startActivity(telaRef);
            }
        });


    }
}
package com.example.planetas;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class estrela extends AppCompatActivity {
   //declaracao dos obj

    Button btnVltSistema , btnAvMerc;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.estrela);

        //Voltar
        btnVltSistema= findViewById(R.id.btnVltSistema);
        btnVltSistema.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaPrincipal = new Intent( getApplicationContext() , MainActivity.class);
                startActivity(telaPrincipal);
            }
        });
        //Avancar
        btnAvMerc= findViewById(R.id.btnAvMerc);
        btnAvMerc.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //navegacao de tela
                Intent telaMerc = new Intent( getApplicationContext() , planeta1.class);
                startActivity(telaMerc);
            }
        });






    }
}
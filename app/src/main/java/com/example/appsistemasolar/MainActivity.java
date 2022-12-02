package com.example.appsistemasolar;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {
    // declaracao dos objetos
    Button btnAvSol,btnRef;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        // funcao botao
        btnAvSol = findViewById(R.id.btnAvSol);
        btnAvSol.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                // navegacao de tela
                Intent telaSol = new Intent(getApplicationContext(),EstrelaActivity.class);
                // carrega a tela instanciada
                startActivity(telaSol);
            }
        });



    }
}
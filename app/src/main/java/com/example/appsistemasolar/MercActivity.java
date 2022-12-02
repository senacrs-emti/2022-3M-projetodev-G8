package com.example.appsistemasolar;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MercActivity extends AppCompatActivity {

    Button btnVltSol,btnAvVen;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_merc);

        btnVltSol = findViewById(R.id.btnVltSol);
        btnVltSol.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent telaSol  = new Intent( getApplicationContext(), EstrelaActivity.class);
                startActivity(telaSol);
            }
        });

        btnAvVen = findViewById(R.id.btnAvVen);
        btnAvVen.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent telaVen  = new Intent( getApplicationContext(), planeta2Activity.class);
                startActivity(telaVen);
            }
        });


    }
}
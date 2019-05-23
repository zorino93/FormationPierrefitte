import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-votetaker',
  templateUrl: './votetaker.component.html',
  styleUrls: ['./votetaker.component.css']
})
export class VotetakerComponent implements OnInit {

  // initialisation que tout par de "0".
  agreed = 0;
  disagreed =0;
  voters = ['lazo','Paulo','A.K.A','Dybala'];

// il incrémente le résultat de l'enfant au père
  onVoted(agreed:boolean){
    agreed ? this.agreed++ : this.disagreed++; // boolean si il a voté on dis "agreed" et sin c'est non "disagreed".
  }

  constructor() { }

  ngOnInit() {
  }

}

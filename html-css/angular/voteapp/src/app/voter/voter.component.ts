import { Component, OnInit, Input, Output, EventEmitter } from '@angular/core';

@Component({
  selector: 'app-voter',
  templateUrl: './voter.component.html',
  styleUrls: ['./voter.component.css']
})
export class VoterComponent implements OnInit {

  @Input() name: string;
  @Output() voted = new EventEmitter<boolean>();
  didVote = false;

  vote(agreed: boolean) {
    this.voted.emit(agreed); // dire si il a voté oui ou non
    this.didVote = true; // dire qu'il a voté et qu'il ne peut plus voté
  }

  constructor() { }

  ngOnInit() {
  }

}

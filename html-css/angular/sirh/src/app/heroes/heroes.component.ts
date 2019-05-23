import { Component, OnInit } from '@angular/core';
import { Hero } from './hero';
import { HeroService } from '../hero.service';
@Component({
  selector: 'app-heroes',
  templateUrl: './heroes.component.html',
  styleUrls: ['./heroes.component.css']
})
export class HeroesComponent implements OnInit {

  // Constructor pour injecté des services 
  constructor(private monService: HeroService) {
  }

  heroes: Hero[];

  selectedHero: Hero;

  chercherEmployes(): void {
    this.heroes = this.monService.getHeroes();
  }

  onSelect(hero: Hero): void {
    this.selectedHero = hero;
  }

  // hero: Hero = {
  //   id: 1,
  //   name: 'Tsuna'
  // };




  ngOnInit() {
    this.chercherEmployes();
  }

}

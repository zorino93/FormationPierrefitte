import { Component, OnInit } from '@angular/core';
import { Hero } from '../heroes/hero';
import { HeroService } from '../hero.service';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.css']
})
export class DashboardComponent implements OnInit {

  heroes: Hero[] = [];

  constructor(private heroService: HeroService) { }

  chercherEmployes(): void {
    this.heroes = this.heroService.getHeroes().slice(0, 3);
  }

  ngOnInit() {
    this.chercherEmployes();
  }

}

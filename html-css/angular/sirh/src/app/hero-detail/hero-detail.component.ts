import { Component, OnInit, Input } from '@angular/core';
import { Hero } from '../heroes/hero';
import { HeroService } from '../hero.service';
import { ActivatedRoute } from '@angular/router';
import { Location } from '@angular/common';

@Component({
  selector: 'app-hero-detail',
  templateUrl: './hero-detail.component.html',
  styleUrls: ['./hero-detail.component.css']
})
export class HeroDetailComponent implements OnInit {

  hero: Hero;

  constructor(private heroService: HeroService, private route: ActivatedRoute, private location: Location) { }

  gethero(): void {
    const id = +this.route.snapshot.paramMap.get('id');
    this.hero = this.heroService.getHero(id);
  }

  ngOnInit() {
    this.gethero();
  }


  goBack():void{
    this.location.back();
  }

}

import { Injectable } from '@angular/core';
import { HEROES } from './mock-heroes';
import { Hero } from './heroes/hero';
@Injectable({
  providedIn: 'root'
})
export class HeroService {

  getHeroes(): Hero[] {
    return HEROES;
  }

  getHero(id: number): Hero {
    return HEROES.find(hero => hero.id === id);
  }

  constructor() { }
}

import { Component, OnInit } from '@angular/core';
import {HttpClient} from '@angular/common/http';

@Component({
  selector: 'app-card',
  templateUrl: './card.component.html',
  styleUrls: ['./card.component.scss']
})
export class CardComponent implements OnInit {

  description = '';
  private id = -1;

  constructor(private http: HttpClient) { }

  ngOnInit() {
    this.getCard();
  }

  getCard() {
    this.description = '';
    this.http.get('/api/getCard.php?id=' + this.id).subscribe(data => {
      this.description = data['description'];
      this.id = data['id'];
    });
  }

}

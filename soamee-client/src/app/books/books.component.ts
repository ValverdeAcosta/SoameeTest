import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { FormsModule } from "@angular/forms";

@Component({
  selector: 'app-books',
  templateUrl: './books.component.html',
  styleUrls: ['./books.component.css']
})


export class BooksComponent implements OnInit {

  public books:any[] = [];
  public authors:any[] = [];
  public book:any[] = [];


  constructor(
    private httpClient: HttpClient,
  )
  { 
  }

  apiPath = "http://localhost:8000/";

  ngOnInit(): void {
  }

  showBooks() {
    this.httpClient.get<any>(this.apiPath+'books').subscribe(
      response => {
        this.books = response;
      }
    );
  }

  getAllDataFromBook(value:any) {
    this.httpClient.get<any>(this.apiPath+'book/'+value).subscribe(
      response => {
        this.book = response.book;
        this.authors = response.author;
      }
    );
  }

  addBook(value:any) {
    this.httpClient.post<any>(this.apiPath+'book/', value).subscribe(
      response => {
        console.log(response);
      }
    );
  }
}

import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';

export class Books {
  constructor(
    public id: number,
    public name: string,
    public isbn: string,
    public author_id: number
  )
  {}
}

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
    private httpClient: HttpClient
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

  getAll(data:any) {
    const bookList:Object|any = document.getElementById('bookList');

    data.forEach(function(value:Object|any){
      const list=document.createElement('li');
      const a=document.createElement('a');
      a.setAttribute('onclick', 'getAllDataFromBook('+value.id+')');
      list.appendChild(a);
      a.appendChild(document.createTextNode(value.name));
      bookList.appendChild(list);
    });
  }

  getAllDataFromBook(value:any) {
  this.httpClient.get<any>(this.apiPath+'book/'+value).subscribe(
    response => {
      this.book = response.book;
      this.authors = response.author;
    }
  );
  }

}

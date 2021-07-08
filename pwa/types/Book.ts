export class Book {
  public "@id"?: string;

  constructor(
    _id?: string,
    public name?: string,
    public author?: string,
<<<<<<< HEAD
    public datePublished?: Date
=======
    public datePublished?: string
>>>>>>> 99bd18fcb8674b8c5bc7af296ea9d07cb3627302
  ) {
    this["@id"] = _id;
  }
}

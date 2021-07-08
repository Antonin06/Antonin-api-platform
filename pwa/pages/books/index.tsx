import { NextComponentType, NextPageContext } from "next";
import { List } from "../../components/book/List";
import { PagedCollection } from "../../types/Collection";
import { Book } from "../../types/Book";
import { fetch } from "../../utils/dataAccess";
import Head from "next/head";

interface Props {
  collection: PagedCollection<Book>;
}

const Page: NextComponentType<NextPageContext, Props, Props> = ({
  collection,
}) => (
  <div>
    <div>
      <Head>
        <title>Book List</title>
      </Head>
    </div>
<<<<<<< HEAD
    <List books={collection["hydra:member"]} />
=======
    <List books={collection ? collection["hydra:member"] : []} />
>>>>>>> 99bd18fcb8674b8c5bc7af296ea9d07cb3627302
  </div>
);

Page.getInitialProps = async () => {
  const collection = await fetch("/books");

  return { collection };
};

export default Page;

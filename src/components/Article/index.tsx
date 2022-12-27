import React from "react";
import styled from "styled-components";

const Article = ({ test1, test2 }: ArticleDetails) => {
  return (
    <>
      <div>
        Article lorum ispium {test1} {test2}
      </div>
    </>
  );
};

export default Article;

interface ArticleDetails {
  test1: string;
  test2: number;
}

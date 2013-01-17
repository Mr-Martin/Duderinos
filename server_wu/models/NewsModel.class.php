<?php

class NewsModel extends BaseModel{

  private $listData = array(
    'items' => array(
      array(
        'title' => "A24 Bags Sofia Coppola's 'The Bling Ring' With Emma Watson and Paris Hilton",
        'text' => "New distributor A24 has acquired U.S. rights to Sofia Coppola’s new film “The Bling Ring,” starring Emma Watson, for a June release. The collaboration is unsurprising since the company is set to release “Bling Ring” producer (and Sofia’s brother) Roman Coppola’s latest film, “A Glimpse Inside the Mind of Charles Swan III” in February.",
        'image' => "bling-ring.jpg"
      ),
      array(
        'title' => "Sundance 2013: The Top Junior Agents You Need to Know",
        'text' => "UTA Independent Film Group’s Rich Klubeck and Rena Ronson, WME Global’s Graham Taylor, ICM Partners’ Jessica Lacy, Preferred Content’s Kevin Iwashina, Paradigm’s Ben Weiss, Submarine Entertainment’s Josh Braun, CAA’s Roeg Sutherland and Micah Green — these are the pros that artfully deliver the filmmakers and their films to the eager buyers promising utmost devotion to their release and sizable fees for the privilege. Most have been doing it a long time, and doing it well, even if the occasional crossed wires and mixed signals scuttle a deal. Their expertise, work ethic and creativity have played an essential part in supporting the best of independent film, nurturing those projects and artists, and making sure they find a grateful audience.",
        'image' => "sundance.jpg"
      )
    )
  );

  public function getNewsList(){
    return $this->listData;
  }

}
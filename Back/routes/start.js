const express = require("express");
const GamesController = require("../controllers/GamesController");
const NewslettersController = require("../controllers/NewslettersController")

const router = express.Router();

router.get("/games", GamesController.index); 
router.post("/games", GamesController.store); 
router.get("/games/:id", GamesController.show);
router.put("/games/:id", GamesController.update);
router.delete("/games/:id", GamesController.delete);

router.get("/Newsletters", NewslettersController.index); 
router.post("/Newsletters", NewslettersController.store); 
router.get("/Newsletters/:id", NewslettersController.show);
router.put("/Newsletters/:id", NewslettersController.update);
router.delete("/Newsletters/:id", NewslettersController.delete);


module.exports = router;

const prisma = require("../config/prisma");

class NewslettersController {
  async index(req, res) {
    try {
      const newsletters = await prisma.newsletter.findMany();
      return res.status(200).json(newsletters);
    } catch (e) {
      return res.status(500).json({ message: e.message });
    }
  }

  async store(req, res) {
    const body = req.body;
    console.log(body);
    try {
      const newsletter = await prisma.newsletter.create({
        data: {
          email: body.email,
        },
      });

      return res.status(201).json(newsletter);
    } catch (e) {
      console.log(e);
      return res.status(500).json({ message: e.message });
    }
  }

  async show(req, res) {
    try {
      const id = req.params.id;
      const newsletter = await prisma.newsletter.findUnique({
        where: {
          id: Number(id),
        },
      });

      if (!newsletter) return res.status(404).json({ message: "newsletter not found" });

      return res.status(200).json(newsletter);
    } catch (e) {
      return res.status(500).json({ message: e.message });
    }
  }

  async update(req, res) {
    try {
      const id = req.params.id;
      const body = req.body;
      const newsletter = await prisma.newsletter.findUnique({
        where: {
          id: Number(id),
        },
      });

      if (!newsletter) {
        return res.status(404).json({ message: "newsletter not found" });
      }

      const updatednewsletter = await prisma.newsletter.update({
        where: { id: Number(id) },
        data: body,
      });

      return res.status(200).json(updatednewsletter);
    } catch (e) {
      return res.status(500).json({ message: e.message });
    }
  }

  async delete(req, res) {
    try {
      const id = req.params.id;
      const newsletter = await prisma.newsletter.findUnique({
        where: {
          id: Number(id),
        },
      });

      if (!newsletter) return res.status(404).json({ message: "newsletter not found" });

      await prisma.newsletter.delete({
        where: {
          id: Number(id),
        },
      });

      return res.status(204).json();
    } catch (e) {
      return res.status(500).json({ message: e.message });
    }
  }
}

module.exports = new NewslettersController();
